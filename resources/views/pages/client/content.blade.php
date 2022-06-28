<div class="flex justify-between items-center">
    @include('components.page_title', ['title'=>'Client', 'subTitle'=>'Gestion des Clients'])
    <div class="flex items-center gap-4">
        @include('components.buttons.btn_print')
        @include('components.buttons.btn_add')
    </div>
</div>