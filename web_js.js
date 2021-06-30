const http = require('http')
const dt = require('./date')
port = 4433
http.createServer((req, res) => {
    res.writeHead(200, {'content-type' : 'text/html'})
    res.end('Connection Established')
    res.write(dt.date())
} ).listen(port)

