# Moodle Plugin: filter_resumebutton

**Embed Resume or Start Again Button Anywhere in Moodle Using Shortcodes**

This filter plugin allows you to embed **resume buttons** for Moodle courses or sections using a simple shortcode syntax. It works in combination with the `local_resume` plugin and provides a dynamic, personalized experience for learners to continue where they left off.

---

## 🧩 Requirements

- Moodle **4.2 to 5.0+**
- Requires the companion plugin: [`local_resume`](https://github.com/rudykarston/local_resume)

---

## ✨ Features

- ✅ Embed resume buttons inside:
  - Pages
  - Labels
  - HTML blocks
  - Course descriptions
- ✅ Supports shortcodes:
  - `[resumebutton courseid=2]`
  - `[resumebutton sectionid=5]`
- ✅ Automatically shows:
  - **Resume** (if incomplete)
  - **Start Again** (if all activities are complete)
  - Nothing (if section is empty)

---

## 📦 Installation

1. Place this plugin in your Moodle `filter/` directory:
   ```bash
   moodle/filter/resumebutton
