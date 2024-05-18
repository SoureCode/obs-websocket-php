
# OBS WebSocket PHP

PHP client for [obs-websocket](https://github.com/obsproject/obs-websocket).

Almost everything is [generated](./src/OBS/Protocol) based on the [`protocol.json`](https://github.com/obsproject/obs-websocket/blob/master/docs/generated/protocol.json).
Based on that there is a [BaseClient](./src/OBS/BaseClient.php) that handles all the requests and responses.
And a [Client](./src/OBS/Client.php) that extends the BaseClient which contains all the available requests.

Under the hood, it uses [phrity/websocket](https://github.com/sirn-se/websocket-php) to connect to the OBS WebSocket.

## Features

- Connect to OBS Studio via WebSocket
- Send commands to control OBS Studio
- Listen to OBS Studio events

## Requirements

- PHP 8.3 or later

## Installation

Install the package via Composer:

```bash
composer require sourecode/obs-websocket-php
```

## Usage

- [Sending Requests](examples/request.php)
- [Event Loop](examples/events.php)
- [Subscription](examples/subscription.php)

## Documentation

Documentation is generated and available under [docs](./docs/index.html).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
