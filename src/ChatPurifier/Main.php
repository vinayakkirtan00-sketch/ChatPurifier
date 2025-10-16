<?php

declare(strict_types=1);

namespace ChatPurifier;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\utils\Config;
use pocketmine\player\Player;

class Main extends PluginBase implements Listener {

    private Config $config;

    public function onEnable(): void {
        @mkdir($this->getDataFolder());
        $this->saveResource("config.yml");
        $this->config = new Config($this->getDataFolder() . "config.yml", Config::YAML);
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("§aChatPurifier plugin enabled successfully!");
    }

    public function onDisable(): void {
        $this->getLogger()->info("§cChatPurifier plugin disabled.");
    }

    public function onChat(PlayerChatEvent $event): void {
        $player = $event->getPlayer();
        $message = $event->getMessage();
        $badwords = $this->config->get("badwords", []);
        $replacement = $this->config->get("replacement", "***");
        $warning = $this->config->get("warning-message", "§cPlease avoid using bad words!");

        $containsBadWord = false;

        foreach ($badwords as $word) {
            if (stripos($message, $word) !== false) {
                $message = str_ireplace($word, $replacement, $message);
                $containsBadWord = true;
            }
        }

        if ($containsBadWord) {
            // Send warning message to the player
            $player->sendMessage($warning);
        }

        $event->setMessage($message);
    }
}