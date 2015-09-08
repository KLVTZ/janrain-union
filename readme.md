Janrain Union
=============
> A Janrain interface for third-party plugins.

**Work in Progress**

Goals
-----
- Modernize singe-sign-on (SSO) with federate service via social login and
  registration
- Interface janrain features with third-party vendors: livefyre.
- Implement modern PHP development the right way to model future plugin
  development.

Progress
--------
Let's treat janrain as an API for interfacing between services. We are still
waiting on janrain to return to us a working widget on our needs for SSO widget.

Update
------
JanRain will generate the provision widget necessary for our use. A future goal
would be to use this as middleman api to login. That is, the widget will still
leverage this as a token generation, but will provide an API for maintaining
session.

Checklist
---------
- Request to API v2 and get user data: *done*
- Architecture, dependencies, seperation of concern: *done*
- Create proper widget
- Maintain session
- Interface with livefyre plugin
- Unit testing

[se]: https://github.com/janrain/se-demos
