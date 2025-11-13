<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Test Ollama using Qwen3 Model Chatbot</h1>

    <input type="text" name="userInput" id="userInput">
    <input type="button" value="Send" onclick="send()">

    <div id="chat"></div>

    <script>
        function send() {
            const userInput = document.getElementById('userInput');
            const chat = document.querySelector('#chat');
            const text = userInput.value;

            if (!text) return;

            chat.innerHTML += `<p><b>You:</b> ${text}</p>`;
            userInput.value = '';

            const replyId = `reply-${Date.now()}`;
            chat.innerHTML += `<p id="${replyId}"><b>Qwen:</b> ...</p>`;

            fetch('response.php', {
                method: 'POST',
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ prompt: text })
            })
            .then(res => res.text())
            .then(reply => {
                document.getElementById(replyId).innerHTML = `<b>Qwen: </b> ${reply}`;
            })
            .catch((error) => {
                console.error('Error:', error);
                document.getElementById(replyId).innerHTML = `<b>Qwen:</b> Error: ${error.message}`;
            })
        }
    </script>
</body>

</html>