# Lab Markdown

---

## Task: Formatting a document in Markdown

## Description of the task :

You need to format a document in Markdown using various formatting elements, including headings, bold text, italics, strikethrough, quotes, code quotes, links, unordered lists, and to-do lists .

---

Welcome to the Lab Markdown repository! This dedicated space is here to help you grasp and excel in the realm of Markdown, a lightweight and user-friendly markup language that simplifies the process of formatting plain text. Markdown is commonly employed for crafting documentation, README files, and even blog posts.

Within this lab, you will gain proficiency in the essential aspects of Markdown syntax, which encompasses headers, lists, links, Code blocks, and more.

Feel at liberty to explore the materials and exercises housed in this repository, as they are designed to augment your proficiency with Markdown. Regardless of whether you are a novice or a seasoned developer, becoming adept at Markdown will enable you to produce lucid and well-structured documents for your projects. So, let's delve in and elevate your Markdown skills!

---

# Rules for Writing README.md:

1.  Clarity: Make sure your content is clear and easy to understand.
1.  Sections: Divide your document into sections for easy navigation.
1.  Installation: Include clear installation instructions.
1.  Usage: Explain how to use your project with examples if possible.
1.  Contributing: Clearly state how others can contribute to your project.
1.  License: Specify the license your project uses.
1.  Visuals: Use badges, screenshots, and diagrams to enhance understanding.
1.  Links: Provide links to important resources, documentation, and live demos.
1.  Formatting: Use formatting (like bold, italics, lists) for readability.
1.  Grammar and Spelling: Proofread your content to ensure there are no errors.

---

# Markdown Styling Commands

## Headers :

<!-- Header -->

To create a heading, add one to six `#` symbols before your heading text. The number of `#` you use will determine the hierarchy level and typeface size of the heading.

```
# Header H1
```

# Header H1

```
# Header H2
```

## Header H2

```
# Header H3
```

### Header H3

```
# Header H4
```

#### Header H4

```
# Header H5
```

##### Header H5

```
# Header H6
```

###### Header H6

---

<!-- Styling text -->

## Styling text

<!-- Italic -->

### Italic :

##### Code :

This is `_italicized_` text

##### Example :

> This is _italicized_ text

<!-- bold -->

### bold :

##### Code :

This is `**bold**` text

##### Example :

> This is **bold** text

<!-- Strikethrough -->

### Strikethrough :

##### Code :

This was `~~mistaken~~` text

##### Example :

> This was ~~mistaken~~ text

<!-- Bold and nested italic	 -->

### Bold and nested italic :

##### Code :

`**_All this text is important_**`

##### Example :

> **_All this text is important_**

<!-- Subscript -->

### Subscript :

##### Code :

This is a `<sub>subscript</sub>` text

##### Example :

> This is a <sub>subscript</sub> text

<!-- superscript -->

### superscript :

##### Code :

This is a `<sup>superscript</sup> `text

##### Example :

> This is a <sup>superscript</sup> text

---

<!-- links -->

## Links

You can create an inline link by wrapping link text in brackets `[ ]`, and then wrapping the `URL` in parentheses `( )`. You can also use the keyboard shortcut `Command+K` to create a link. When you have text selected, you can paste a URL from your clipboard to automatically create a link from the selection.

#### Code :

This site was built using `[github](https://github.com/)`

##### Example :

> This site was built using [github](https://github.com/)

---

<!-- Quoting text -->

### Quoting text

##### Code :

`>` Text that is not a quote

##### Example :

> Text that is a quote

---

<!-- Quoting Code -->

### Quoting Code

Use `git status` to list all new or modified files that haven't yet been committed.

Some basic Git commands are:

##### Code :

` ``` `
git status
git add
git commit
` ``` `

##### Example :

```
git status
git add
git commit
```

---

### Lists

<!-- UL -->

You can make an unordered list by preceding one or more lines of text with `-`,
`*`, or ` +` .

##### Code :

`-` git init

`*` git add

`-` git commit

##### Example :

- git init

* git add

- git commit

<!-- OL -->

```
To order your list, precede each line with a number.
```

1. git init
1. git add
1. git commit

---

<!-- images -->

### images :

##### Code :

**Absolute URL**
```
![image logo](https://icones.pro/wp-content/uploads/2021/03/avatar-de-personne-icone-homme.png)
```
**Relative URL**

```
![image logo](./logo.jpg)
```

##### Example :


| Absolute URL | Relative URL |
| ------------ | ------------ |
|![image logo](https://icones.pro/wp-content/uploads/2021/03/avatar-de-personne-icone-homme.png)|![image logo](./logo.jpg)|


<!-- table -->

### Table :

##### Code :

```

| ID  | first Name    | last Name |
| --- | ------ | ------ |
| 1   | sarsri | imrane |
| 2   | zanni  | hamza  |
| 3   | agreen | reda   |
```

##### Example :

| ID  | first Name | last Name |
| --- | ---------- | --------- |
| 1   | sarsri     | imrane    |
| 2   | zanni      | hamza     |
| 3   | agreen     | reda      |
