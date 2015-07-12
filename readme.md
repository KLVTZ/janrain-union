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
The following service is dependant on a front-end widget. This is a work in
progress on implementing this on the front-end. Current strategy is to have
service object queue the necessary dependancies on plugin load. The other task
is actually creating a widget that takes advantage of Janrain's current API.
Right now, we are using [Janrain demo products][se] as a basis for request.

Biggest issue is creating a widget that interacts with federate (SSO service)
and maintains these sessions throughout a user's lifetime. Goal is to reach out
for help.

Checklist
---------
- Request to API v2 and get user data: *done*
- Architecture, dependencies, seperation of concern: *done*
- Create proper widget
- Maintain session
- Interface with livefyre plugin

[se]: https://github.com/janrain/se-demos
