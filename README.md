# OnePage Template

A small demo template to realize a "one pager" with TYPO3.

This is only a basic implementation and it's missing still some features.

## Setup
1. Install per compser and activate extension 
2. Include the template of this extension (fluid-styled-content, fluid-styled-content-css andseo-sitemap are included as dependencies) 
3. Adjust the basic settings for your website in the siteset



It only needs a basic site structure:

![Page Tree](https://gitlab.com/wolfgang.wagner/wwonepagetemplate/-/raw/master/Resources/Public/Images/pagetree.png "Page Tree")

Optionally, a subtree for a meta navigation can be created (for example, for the usual pages for the imprint or the privacy policy). Create a page of the type "Folder" or "Separator" for this purpose, then place the additional pages under this page. The ID of the parent page must be adjusted in the constants.

Furthermore, you can optionally include PageTSconfig with a few default settings in the page properties.

![PageTSconfig](https://gitlab.com/wolfgang.wagner/wwonepagetemplate/-/raw/master/Resources/Public/Images/pagetsconfig.png "PageTSconfig")

## Problems
1. delete all previous connections of the template
2. create folder for site set: wwonepagetemplate/Configuration/Sets/wwonepagetemplate
3. define site set with dependencies, here preferably all those that are always required in the site set
