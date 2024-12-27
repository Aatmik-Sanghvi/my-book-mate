document.addEventListener("DOMContentLoaded", function() {
    const text = "Hello, I am your book recommendation AI.";
    const insideh2 = document.getElementById("insideH2");
    let index = 0;

    function typeWriter() {
        if (index < text.length) {

            insideh2.textContent += text.charAt(index);
            index++;
            setTimeout(typeWriter, 60); // Adjust the speed by changing the number (milliseconds)
        }
    }
    typeWriter();
});

const chatInput = document.getElementById('chatInput');
// const sendBtn = document.getElementById('sendBtn');
const chatMessages = document.getElementById('chatMessages');

$(document).ready(function(){
    $('#askClicked').on('click', function() {
        const userMessage = chatInput.value.trim();
        if (userMessage) {
            const userMessageElem = document.createElement('div');
            userMessageElem.classList.add('chat-message', 'user-message','mt-2');
            userMessageElem.innerHTML = `<p>${userMessage}</p>`;
            chatMessages.appendChild(userMessageElem);

            // Clear the input field
            chatInput.value = '';

            const loaderElem = document.createElement('div');
            loaderElem.classList.add('spinner-border', 'text-color', 'mt-2');
            loaderElem.id = 'spinner';
            loaderElem.innerHTML = `<span class="sr-only">Loading...</span>`; // Replace "..." with any spinner or dots for loader
            chatMessages.appendChild(loaderElem);
            $.ajax({
                type:"POST",
                headers:{
                    "X-CSRF-TOKEN":_token,
                },
                url: baseUrl + "ask-ai",
                data:{
                    userAskMessage: userMessage
                },
                success:function(data){
                    console.log(data);
                    const res = data
                    // Scroll to the latest message
                    chatMessages.scrollTop = chatMessages.scrollHeight;

                    // Simulate assistant response (for demonstration)
                    setTimeout(() => {
                        const assistantMessageElem = document.createElement('div');
                        assistantMessageElem.classList.add('chat-message', 'assistant-message');
                        // assistantMessageElem.innerHTML = `<p>${res}</p>`;
                          = `<table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Book Name</th>
                                            <th scope="col">About Book</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                    </tbody>
                                </table>`;
                        $('#spinner').hide();
                        chatMessages.appendChild(assistantMessageElem);

                        // Scroll to the latest message
                        chatMessages.scrollTop = chatMessages.scrollHeight;
                    }, 1000);
                }
            })
        }
    }); 
});