const WebSocket = require('ws');

const ws = new WebSocket('wss://leviatan.bet:22188/arcade');

ws.on('open', () => {
    console.log('Connected to WebSocket server');
    ws.send(JSON.stringify({ type: 'ping' })); // Prueba enviando un mensaje
});

ws.on('message', (data) => {
    console.log('Message received:', data);
});

ws.on('close', (code, reason) => {
    console.log(`Disconnected: ${code}, ${reason}`);
});

ws.on('error', (error) => {
    console.error('Error:', error);
});
