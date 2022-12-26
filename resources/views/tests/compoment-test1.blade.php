<x-test.app>
    <x-slot name="header">
        ヘッダー1
    </x-slot>
コンポーネント1
<x-test.card title="タイトル" content="本文" :message="$message"/>
<x-test.card title="タイトル"/>
<x-test.card title="cssを変更したい" class="bg-red-300 w-1/4"/>
</x-test.app>