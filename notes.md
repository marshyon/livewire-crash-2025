some style changes - see `app.css`

added a form

```html
<form wire:submit="$refresh">
   <span class="mr-2">Your Name:</span>
   <input type="text" wire:model.live.debounce.500ms="name">
</form>
```

this adds into this blade binding between a simple form element and `$name` of the model

simple but also shows debounce and live 

[live updating](https://livewire.laravel.com/docs/wire-model#live-updating) is where changes are sent as the user types

to cut down on some traffic in this regard, debounce is used so there is a delay between data bursts, reducing server load when you have 1000s of users

