parameters or 'props' can be passed into livewire components not unlike in other frameworks like react

```php
    <livewire:page-header subtitle="Here's a list of your books...">
```

is how a string literal can be passed to the page header component

where data is dynamic in nature, this needs to be preceded with a colon `:subtitle=...` but here it is not so that is not needed

within the component page header, it receives this and can use the value in a [lifecycle hook](https://livewire.laravel.com/docs/lifecycle-hooks), again, not dissimilar to in react at least in principle

[passing paraemers](https://livewire.laravel.com/docs/components#passing-data-into-components) describes the use of mount and this in action