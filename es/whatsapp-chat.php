<!-- WhatsApp Chat Widget - EseSphere Limited -->
<div id="whatsapp-widget">
    <div id="whatsapp-button">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" />
    </div>

    <div id="whatsapp-popup">
        <div class="header">
            <strong>EseSphere Limited</strong>
            <p>Hi! 👋 How can we help you today?</p>
        </div>

        <a
            href="https://wa.me/447984863164?text=Hello%2C%20I%20would%20like%20to%20know%20more%20about%20your%20services."
            class="start-chat"
            target="_blank">
            Start Chat
        </a>
    </div>
</div>

<style>
    /* Button */
    #whatsapp-button {
        position: fixed;
        bottom: 60px;
        right: 20px;
        background: #00aaff;
        /* Sky Blue */
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        z-index: 9999;
    }

    #whatsapp-button img {
        width: 35px;
        height: 35px;
    }

    /* Popup */
    #whatsapp-popup {
        position: fixed;
        bottom: 90px;
        right: 20px;
        width: 260px;
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
        padding: 15px;
        display: none;
        z-index: 9999;
        font-family: Arial, sans-serif;
    }

    #whatsapp-popup .header {
        background: #001f3f;
        /* Navy Blue */
        color: white;
        padding: 10px;
        border-radius: 10px;
        margin-bottom: 12px;
    }

    #whatsapp-popup .start-chat {
        display: block;
        background: #25D366;
        text-align: center;
        padding: 10px;
        border-radius: 8px;
        text-decoration: none;
        color: white;
        font-weight: bold;
    }

    #whatsapp-popup .start-chat:hover {
        background: #1ebe5d;
    }
</style>

<script>
    document.getElementById("whatsapp-button").onclick = function() {
        const popup = document.getElementById("whatsapp-popup");
        popup.style.display = popup.style.display === "block" ? "none" : "block";
    };
</script>