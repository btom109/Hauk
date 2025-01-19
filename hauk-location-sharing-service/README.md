# Hauk Location Sharing Service

[![GitHub license](https://img.shields.io/github/license/bilde2910/Hauk)](https://github.com/bilde2910/Hauk/blob/master/LICENSE)
[![GitHub issues](https://img.shields.io/github/issues/bilde2910/Hauk)](https://github.com/bilde2910/Hauk/issues)
[![GitHub stars](https://img.shields.io/github/stars/bilde2910/Hauk)](https://github.com/bilde2910/Hauk/stargazers)

Hauk is a fully open source, self-hosted location sharing service. This project provides all the necessary components to set up and run Hauk on your own server.

## System Requirements

- Web server running PHP and Memcached or Redis.
- PHP `memcached`, `memcache` or `redis` extension installed on the web server.
- PHP `ldap` extension if using LDAP authentication.
- Android 6 or above to run the client application.

## Installation

1. Clone the repository:
   ```
   git clone https://github.com/bilde2910/Hauk.git
   cd Hauk
   ```

2. Set up your web server and ensure the required PHP extensions are installed.

3. Configure the server settings in `src/server/config/config.php`.

4. Start the server by navigating to `src/server/index.php`.

5. Access the client application by opening `src/client/index.html` in your web browser.

## Usage

Once the server is running, users can share their locations with others. The client application provides an interface for users to manage their location sharing preferences.

## Contributing

Contributions are welcome! Please open an issue or submit a pull request for any enhancements or bug fixes.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.