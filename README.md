# Bonfire News Module

A custom module for the [Bonfire Admin Dashboard](https://github.com/ci-bonfire/Bonfire) mod. 
Previously made by [Jeff Fox](http://www.aeoliandigital.com/) - Lead Developer in 2012 and I will now
make it live a second life as mush as i can with next versions of Bonfire ;)
It allows you to create, manage and publish news stories for your site. You can use the built in API 
to post compact news lists or articles with previews in any view with just a line or two of code.

## Features

- Create and manage news articles
- Retrieve single or multiple articles as views or as a list array
- Manage categories and statuses 
( V0.5 : Still need to make a management part for it, but can use it in news already )
- Add file attachmments and images
- Enabled support for the [Bonfire Comments](https://github.com/jfox015/Bonfire-Comments) module to accept comments and start discussions
( V0.5 : Support for my version of comments module is working, i will publish Comments module in next days )

## Installation and Usage

- Download the latest stable release from [Github.com](https://github.com/juju95/Bonfire-JNews)
- Extract the contents of the zip into the root of your bonfire web site folder. You may be prompted to overwrite existing directories. Say OK to this.
- Run the News Migration in the Admin Springboard (Developer -> Database Tools -> Migrations)
- Browse to Settings -> News and change settings as needed. 
- Browse to Content -> News. There are two example news articles added as drafts upon installation. You can edit or delete them as you see fit.

## Change Log
###0.5 (Jun 2014)
- Restrict public shown articles to deleted = 0 
- Added TinyMCE in themes/admin/js/editors/ to replace Markitup
- Added Article title in Article URL, better for search engines
- Added Hours and Minuts in all dates, for webmasters posting more than 1 news per day ;)
- Changed the datepicker to a better datetime picker ( themes/admin/js & css )

###0.4 (May 2014 )
- Corrected all "main" bugs to make it works "as it" on Bonfire 0.7.1

###0.3 (Oct 2013)
- Moved hardcoded strings in controller to language file
- Fixed issues with deleting news articles on admin index page (janlueders)
- Fixed author list errors on news articles admin page
- Fixed typos and cleaned up language issues (remailednet)
- Made attachment settings conditional on use of attachments (remailednet)

###0.2 (May 2012)
- Added Markitup! rich text editor (svizion)
- Added file attachment support
- Added public news submission form
- Added Bonfire Comments module support
- Bug Fixes (seandowney, svizion)

###0.1 (March 2012)
- Initial Release

Follow the progress of the library on the [Change Log](https://github.com/jfox015/Bonfire-News/wiki/Change-Log) page

## Team
- [Julien DAVIAUD](https://github.com/juju95) - Lead Developer

Previous Team
- [Jeff Fox](http://www.aeoliandigital.com/) - Lead Developer
- [Shawn Crigger](http://www.s-vizion.com/)  - Contributing Developer
 
## Contribute to the development

This mod is a 100% free and open source project. The source code is publicly available on GitHub.com. 
If you want to contribute to the development, simply fork the project, hack the code and send pull requests with your updates.

## License

Copyright (c) 2012-13 Jeff Fox. 2014+ Julien DAVIAUD

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.