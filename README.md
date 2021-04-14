# OnePage Template

A small demo template to realize a "one pager" with TYPO3.

This is only a basic implementation and it's missing still some features.

## Setup

1. Install and activate extension
2. Include the static template from fluid_styled_content
3. Include the static template of this extension
4. Adjust the basic settings for your website in the constants editor

It only needs a basic site structure:

![Page Tree](https://gitlab.com/wolfgang.wagner/wwonepagetemplate/-/raw/master/Resources/Public/Images/pagetree.png "Page Tree")

Optionally, a subtree for a meta navigation can be created (for example, for the usual pages for the imprint or the privacy policy). Create a page of the type "Folder" or "Separator" for this purpose, then place the additional pages under this page. The ID of the parent page must be adjusted in the constants.

Furthermore, you can optionally include PageTSconfig with a few default settings in the page properties.

![PageTSconfig](https://gitlab.com/wolfgang.wagner/wwonepagetemplate/-/raw/master/Resources/Public/Images/pagetsconfig.png "PageTSconfig")

