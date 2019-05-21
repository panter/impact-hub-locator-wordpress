# Impact Hub Hub Locator Plugin

## Live Demo of inline Frame

[Live Demo](https://api.hub.panter.cloud/iframes/hubs)

## Usage

Edit your frontpage, switch to wordpress classic editor and insert the following:

```
[IHLL]
```

To specify the default hub:

```
[IHLL hub="zürich-kraftwerk"]
```
Find your location ID: https://docs.google.com/spreadsheets/d/1tLRn6KkaBUYH20PlBSNBo6RkvMnSTjlOUYg3yq8-jIo/edit#gid=0

If you want to open all links in a new tab, use this:

```
[IHLL openInNewTab="true"]
```

You can also change the color:

```
[IHLL color="#51C4F1"]
```

or all in one:

```
[IHLL hub="zürich-kraftwerk" openInNewTab="true" color="#51C4F1"]
```

## install

### Requirements
* A wordpress installation with a propper IH-Global wordpress template

### Getting Started
* Download latest version

#### Step 1
Upload pluging
![Upload-WP-Plugin](docs/screenshots/upload-plugin.png)

#### Step 2
Go into (edit) the page you want to implement the IH-Locator (eg. the Frontpage)
![Edit-Frontpage](docs/screenshots/edit-frontpage.png)

#### Step 3
Add a new RAW section on top
![add-raw-section](docs/screenshots/add-raw-section.png)

#### Step 3
Write in your short code

Eg. 
[IHLL hub="zürich-kraftwerk" openInNewTab="false" color="#51C4F1"]
or just
[IHLL] to run it in default mode (auto location etc.)

![add-shortcode](docs/screenshots/add-shortcode.png)







