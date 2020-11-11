<div>
    <h1>Hello World!</h1>

    <div x-data>
        <button wire:click="increment" type="button">first click here</button>
        <ul x-data id="mylist">
            @for ($i = 0; $i < $count; $i++)
                <li x-on:click='console.log("i was clicked")'>then click here</li>
            @endfor
        </ul>
    </div>
</div>
