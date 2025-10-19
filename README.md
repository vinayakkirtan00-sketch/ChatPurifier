# 💬 ChatPurifier

[![](https://poggit.pmmp.io/shield.state/ChatPurifier)](https://poggit.pmmp.io/p/ChatPurifier)

**ChatPurifier** is a lightweight and modern PocketMine-MP plugin that automatically filters offensive or unwanted words from the chat — keeping your Minecraft server friendly, clean, and fun for everyone.

---

## ✨ Features
- 🔤 Detects and replaces bad words automatically  
- ⚠️ Sends a warning message to players using bad words  
- ⚙️ Fully customizable via `config.yml`  
- 🧩 Compatible with **PocketMine-MP 1.21.111** (API 5.0.0)

---

## 📦 Installation
1. Download the latest **ChatPurifier.phar** from Poggit:  
   👉 [Plugin Download Page](https://poggit.pmmp.io/p/ChatPurifier/1.0.0#)

2. Place the file into your server’s `/plugins` folder  
3. Restart the server  
4. Customize settings in `plugins/ChatPurifier/config.yml`  

---

## ⚙️ Configuration Example (`config.yml`)
```yaml
  - idiot
  - stupid
  - badword1
replacement: "***"
warning-message: "§cPlease avoid using bad words in the chat!"
