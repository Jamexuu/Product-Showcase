<button class="chatbot-toggle btn btn-dark rounded-circle shadow-lg d-flex align-items-center justify-content-center p-3"
    id="chatbotToggle">
    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 1024 1024">
        <path
            d="M738.3 287.6H285.7c-59 0-106.8 47.8-106.8 106.8v303.1c0 59 47.8 106.8 106.8 106.8h81.5v111.1c0 .7.8 1.1 1.4.7l166.9-110.6 41.8-.8h117.4l43.6-.4c59 0 106.8-47.8 106.8-106.8V394.5c0-59-47.8-106.9-106.8-106.9zM351.7 448.2c0-29.5 23.9-53.5 53.5-53.5s53.5 23.9 53.5 53.5-23.9 53.5-53.5 53.5-53.5-23.9-53.5-53.5zm157.9 267.1c-67.8 0-123.8-47.5-132.3-109h264.6c-8.6 61.5-64.5 109-132.3 109zm110-213.7c-29.5 0-53.5-23.9-53.5-53.5s23.9-53.5 53.5-53.5 53.5 23.9 53.5 53.5-23.9 53.5-53.5 53.5zM867.2 644.5V453.1h26.5c19.4 0 35.1 15.7 35.1 35.1v121.1c0 19.4-15.7 35.1-35.1 35.1h-26.5zM95.2 609.4V488.2c0-19.4 15.7-35.1 35.1-35.1h26.5v191.3h-26.5c-19.4 0-35.1-15.7-35.1-35.1zM561.5 149.6c0 23.4-15.6 43.3-36.9 49.7v44.9h-30v-44.9c-21.4-6.5-36.9-26.3-36.9-49.7 0-28.6 23.3-51.9 51.9-51.9s51.9 23.3 51.9 51.9z">
        </path>
    </svg>
</button>

<div class="chatbot-window card shadow-lg border-0 d-none rounded-4 d-flex flex-column position-absolute" id="chatbotWindow" style="bottom: 100px; left: 10px; max-width: 380px; max-height: 70vh;">
    <div class="card-header bg-dark text-white d-flex align-items-center justify-content-between p-3 border-0 rounded-top-3" style="min-height: 70px;">
        <div class="d-flex align-items-center gap-3">
            <div class="chat-avatar bg-white rounded-circle d-flex align-items-center justify-content-center fw-bold text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 1024 1024">
                    <path
                        d="M738.3 287.6H285.7c-59 0-106.8 47.8-106.8 106.8v303.1c0 59 47.8 106.8 106.8 106.8h81.5v111.1c0 .7.8 1.1 1.4.7l166.9-110.6 41.8-.8h117.4l43.6-.4c59 0 106.8-47.8 106.8-106.8V394.5c0-59-47.8-106.9-106.8-106.9zM351.7 448.2c0-29.5 23.9-53.5 53.5-53.5s53.5 23.9 53.5 53.5-23.9 53.5-53.5 53.5-53.5-23.9-53.5-53.5zm157.9 267.1c-67.8 0-123.8-47.5-132.3-109h264.6c-8.6 61.5-64.5 109-132.3 109zm110-213.7c-29.5 0-53.5-23.9-53.5-53.5s23.9-53.5 53.5-53.5 53.5 23.9 53.5 53.5-23.9 53.5-53.5 53.5zM867.2 644.5V453.1h26.5c19.4 0 35.1 15.7 35.1 35.1v121.1c0 19.4-15.7 35.1-35.1 35.1h-26.5zM95.2 609.4V488.2c0-19.4 15.7-35.1 35.1-35.1h26.5v191.3h-26.5c-19.4 0-35.1-15.7-35.1-35.1zM561.5 149.6c0 23.4-15.6 43.3-36.9 49.7v44.9h-30v-44.9c-21.4-6.5-36.9-26.3-36.9-49.7 0-28.6 23.3-51.9 51.9-51.9s51.9 23.3 51.9 51.9z">
                    </path>
                </svg>
            </div>

            <div>
                <h5 class="mb-0 fs-6 fw-semibold">Echo</h5>
                <small class="opacity-75 small">AI Chatbot for Legion 5</small>
            </div>
        </div>

        <button class="btn btn-sm rounded-circle d-flex align-items-center justify-content-center material-symbols-rounded text-white border-0 p-2"
            id="minimizeBtn" style="background: rgba(255, 255, 255, 0.2);">
            keyboard_arrow_down
        </button>
    </div>

    <div class="card-body chat-messages bg-light p-3 overflow-auto" id="chatMessages">
        <div class="d-flex justify-content-start mb-2">
            <div class="message-bubble card border-0 shadow-sm">
                <div class="card-body p-3">
                    <small class="text-dark">Hello! How can I help you?</small>
                </div>
            </div>
        </div>
    </div>

    <div class="card-footer bg-white border-top p-3 rounded-bottom-3">
        <div class="d-flex gap-2 align-items-center">
            <input type="text" id="chatInput" class="form-control rounded-pill border-2 border-dark shadow-none" placeholder="Send your question...">
            <button class="btn btn-link text-dark p-2 material-symbols-rounded lh-1 fs-3" id="sendBtn">send</button>
        </div>
    </div>
</div>