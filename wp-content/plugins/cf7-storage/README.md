# Contact Form 7 Storage plugin for WordPress

**Contact Form 7 Storage plugin stores copies of all Contact Form 7 submissions (including attachments) in your WordPress database.** All form entries and leads will be stored safely even if your e-mail goes down or e-mail messages go missing or get deleted.

**New in 1.5.0:** Specify the CSV delimiter character right before doing the export.

This plugin is developed and maintained by [Kaspars Dambis](https://kaspars.net) who is a WordPress core contributor and professional WordPress consultant since 2007.

---

_Have you tried our free [Contact Form 7 Controls](https://wordpress.org/plugins/contact-form-7-extras/) plugin which adds simple controls for various features of the Contact Form 7 form output (disable AJAX, default CSS, track events with Google Analytics, etc.). [Get it now](https://wordpress.org/plugins/contact-form-7-extras/)._


## Features

**All form submissions are stored in the WordPress backend in addition to being sent via e-mail.** E-mail delivery is never 100% reliable and having a backup of all contact entries will ensure you never miss a lead or inquiry.

![List of all contact form submissions](https://preseto.com/wp-content/uploads/2014/05/01_screenshot.png)

**Export form submissions as CSV for Excel.** Export all submissions or use the date and form filters to select which entries you want to export. Export also includes links to entry attachments.

![CSV export of Contact Form 7 entries](https://preseto.com/wp-content/uploads/2014/05/03_screenshot.png)

**Each entry stores the following details about the submission:**

- Individual input field values (also available as individual columns in the exported CSV files).
- All attachments uploaded to the contact form.
- Time and date of the entry.
- E-mail address of the contact form recipient.
- Subject line of the e-mail that was sent to the contact form recipient.
- Post or page URL where the contact form was submitted (referer).
- IP address, browser and device information (user-agent) of the submission.
- Link to the configuration page for the contact form that was used for submission.

![Single contact form submission](https://preseto.com/wp-content/uploads/2014/05/02_screenshot.png)


## Installation

1. Select *"Plugins > Add New"* from the main menu in your WordPress dashboard.
2. Select the *"Upload"* tab at the top of the page.
3. Select the *cf7-storage.zip* file for the upload and click *"Upload"*.
4. Be sure to activate the plugin once it has been uploaded.


## Usage

**This plugin adds a new section called “Entries” under the "Contact" menu** in the WordPress dashboard which lists all of the contact form submissions in a reverse chronological order. Quick preview of each entry to avoid extra clicks.

**Dropdown selectors at the top of the list provide filtering and sorting of the contact form entries** by the contact form used for submission and the date of submission.

**Export entries as CSV** by using the "Export as CSV" button at the top of the form entry list. Use the dropdown filters or the bulk action dropdown selector to select which submissions to export. Specify the CSV delimiter character (comma, semicolon or tab) for quickly opening the file in MS Excel.

**Free form text search is also available** for finding a specific entry.

**Reference entry ID and entry URL in the e-mails** that get sent to the admin:

- `[storage_entry_id]` is replaced with a unique entry ID such as 3212, and
- `[storage_entry_url]` generates a link to the entry in the backend accessible only to registered users.

Please note that Contact Form 7 doesn't support wrapping variables in square brackets `[]` such as `[[storage_entry_id]]`. Please use another set of characters (for example `{}` or `()`).


## Automatic Updates

Install the [Envato WordPress Toolkit plugin](https://github.com/envato/envato-wordpress-toolkit) to enable automatic updates of this plugin right from your WordPress dashboard. Don't forget to specify your API key and CodeCanyon username in the "Envato Toolkit" settings page.


## Requirements

- [Contact Form 7 plugin](https://wordpress.org/plugins/contact-form-7/)
- Tested up to: WordPress 4.7.2
- Requires at least: WordPress 3.2

## Screenshots

1. List of all form submissions.
2. Detailed view of each submission.
3. CSV export of form submissions.

## Support

Please use the [dedicated support section on CodeCanyon](https://codecanyon.net/item/storage-for-contact-form-7-/7806229/support)</a>.


## Changelog

### 1.5.5 (February 18, 2017)
- Bugfix: Store "piped" checkbox labels instead of just values.

### 1.5.4 (June 3, 2016)
- Bugfix: Fix the `[storage_entry_url]` mail tag URL.

### 1.5.3 (June 1, 2016)
- Bugfix: Check for the field type before adding the piped field label.
- Bugfix: Allow export of the selected entries only.

### 1.5.2 (May 21, 2016)
- New feature: Added a subscription form for plugin update notifications.
- New feature: Added a link to form entries to the plugin list next to the "Activate" button.

### 1.5.1 (May 10, 2016)
- New feature: Add field values from the [pipped fields](http://contactform7.com/selectable-recipient-with-pipes/) to the CSV export with a `-pipe-label` field name suffix.
- Bugfix: Ensure that bulk trash/delete/untrash works as expected after changing the `WP_List_Table` definition.

### 1.5.0 (May 4, 2016)
- Added CSV delimiter selector for better Excel support out of the box.
- Bugfix: The length of the URL no longer increases between searches.

### 1.4.5 (December 10, 2015)
- Export CSV now includes the remote IP address by default.
- Bugfix: `cf7_storage_csv_columns` filter is now applied *after* the individual form field value columns have been added to the export array.

### 1.4.4 (September 6, 2015)
- Bugfix: Don't cast entry ID to integer during `get_post()` call.
- Add a filter `cf7_storage_csv_delimiter` to enable custom CSV delimiters. Use ";" as the default column delimiter in CSV export files (for Microsoft Excel compatability).
- Exported CSV files should now open correctly in Excel by default.

### 1.4.3
- Add form input field names as column headers in the CSV export.

### 1.4.2
- Add support for fields with multiple values (checkboxes, radio) to CSV export too.

### 1.4.1
- Add support for fields with multiple values (checkboxes, radio) in the entry view.

### 1.4
- Enable `[storage_entry_id]` and `[storage_entry_url]` mail tags.
- Fix issue with upload filename backslashes being removed on Windows servers.

### 1.3.8
- Don't store the mail 2 which is usually sent as a receipt to the user.

### 1.3.7
- Include automatic update library which was missing in 1.3.6.

### 1.3.6
- Show uploaded files in the backend even if they were not mailed.

### 1.3.4
- More reliable automatic updates.

### 1.3.3
- Bugfix: Include all available contact forms in the drop-down filter.

### 1.3.2
- Style table columns in the admin index view.

### 1.3.1
- Include entry subject in the admin index view.
- Enable quick preview of entry content from the admin index view.

### 1.3
- Enable automatic updates via the [Envato WordPress Toolkit plugin](https://github.com/envato/envato-wordpress-toolkit).

### 1.2
- Support for Contact Form 7 version 3.9.

### 1.1.0
- Add entry export functionality.

### 1.0.3
- Add support for localization.
- Add Latvian translation.

### 1.0.1
- Simplify the readme file.

### 1.0
- Initial release.