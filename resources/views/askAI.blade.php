@extends('layouts.sidebar')
@section('main-dashboard-component')
    <link rel="stylesheet" href="{{ asset('assets/backend/css/chat.css') }}">
    <div class="container">
        <div style="font-weight: bold;
        white-space: nowrap;
        overflow: hidden;">
            <h2 class="text-color" id="insideH2"></h2>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <div class="chat-box shadow-lg rounded">
                <!-- Chat Messages -->
                <div class="chat-messages p-3" id="chatMessages">
                    <!-- Example message -->
                    <div class="chat-message user-message">
                        <p>Suggest me a book for improving my public speaking skills and boosting my confidence</p>
                    </div>
                    <div class="chat-message assistant-message">
                        <p>The 9 Public-Speaking Secrets of the World's Top Minds" by Carmine Gallo. This book
                            analyzes some of the most successful TED Talks and distills their strategies into actionable
                            insights.</p>
                    </div>
                </div>
                <!-- Chat Input -->
                <div class="chat-input d-flex align-items-center">
                    {{-- <input type="text" class="form-control" id="chatInput" placeholder="Type your message..."> --}}
                    <input type="text" class="form-control me-2" id="chatInput" name="askAI"
                        placeholder="Tell me what types of books you like, and I'll recommend one for you!">
                    <a type="button" class="btn btn-primary ms-2" id="askClicked">Ask</a>
                </div>
            </div>
        </div>
        {{-- </div> --}}
    </div>
@section('js')
    <script>
            const token = @json(config('services.openai.openai_secret'));
    </script>
    <script src="{{ asset('assets/backend/js/chat.js') }}"></script>
@stop
@endsection
