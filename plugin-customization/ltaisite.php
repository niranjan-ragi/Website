<head>
    <title>Chat Widget Example</title>
    <!-- Add React and ReactDOM -->
    <script crossorigin src="https://unpkg.com/react@18/umd/react.production.min.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js"></script>
    <!-- Add the chat widget and its styles -->
    <link rel="stylesheet" href="https://sitechime2025b.lowtouch.ai/data/openai-chat-widget.css">
    <script src="https://sitechime2025b.lowtouch.ai/data/chat-widget.umd.js"></script>
</head>
<body>
    <div id="chat-widget"></div>
    <script>
        // Initialize the chat widget
        const { mountChatWidget } = SiteChimeWidget;
        mountChatWidget('chat-widget', {
            apiKey: '',
            configUrl: 'https://sitechime2025b.lowtouch.ai/data/widget-config.json',
            position: 'bottom-right',
            theme: {
                primary: '#007bff',
                secondary: '#ffffff',
                text: '#000000',
                surface: '#ffffff',
                border: '#e5e7eb'
            }
        });
    </script>
</body>
