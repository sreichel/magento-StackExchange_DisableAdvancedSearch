# DISCONTINUED

It is part of [OpenMage](https://github.com/OpenMage/magento-lts/) v20.13.0.

---

# DisableAdvancedSearch Magento 1 Extension

This extension adds availability to disable search by SKU, even when SKU is globally set to searchable.

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/00cbeb80e2684a15ab47da813ccfff0b)](https://www.codacy.com/app/sreichel/magento-StackExchange_DisableAdvancedSearch?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=sreichel/magento-StackExchange_DisableAdvancedSearch&amp;utm_campaign=Badge_Grade)
[![Maintainability](https://api.codeclimate.com/v1/badges/4e6a23b1b3806c12ec76/maintainability)](https://codeclimate.com/github/sreichel/magento-StackExchange_DisableAdvancedSearch/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/4e6a23b1b3806c12ec76/test_coverage)](https://codeclimate.com/github/sreichel/magento-StackExchange_DisableAdvancedSearch/test_coverage)

## Facts
- version: 1.0.0
- extension key: StackExchange_DisableAdvancedSearch
- [extension on GitHub](https://github.com/sreichel/magento-StackExchange_DisableAdvancedSearch)

### Description
[How to disable Advanced Search?](https://magento.stackexchange.com/questions/36088/how-to-disable-advanced-search)

> How can I disable advanced search feature in Magento?
>  
>  Even you remove the links from frontend using layouts, if someone who knows Magento URL's accesses **/catalogsearch/advanced** will get the Advanced Search page.

### Requirements
- PHP >= 5.4.0 

### Compatibility
- Magento >= 1.5

#### Installation Instructions
- via modman
```
modman clone https://github.com/sreichel/magento-StackExchange_DisableAdvancedSearch.git
```
- via composer
```
composer require mse-sv3n/m1-disable-advanced-search
```

#### Uninstallation
- via modman
```
modman remove magento-stackexchange-disableadvancesdsearch
```
- via composer
```
composer remove mse-sv3n/m1-disable-advanced-search
```

### Usage
1. get to config section and enable/disable function

### Support
If you have any issues with this extension, open an issue on [GitHub](https://github.com/sreichel/magento-StackExchange_DisableAdvancedSearch/issues).

### Contribution
Any contribution is highly appreciated. The best way to contribute code is to open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests).

### License
[OSL - Open Software Licence 3.0](http://opensource.org/licenses/osl-3.0.php)
