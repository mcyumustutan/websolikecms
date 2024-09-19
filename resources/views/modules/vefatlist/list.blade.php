@if($modules['vefatlist'])

<!-- Adds the Core Table Styles -->
@rappasoftTableStyles

<div class="container">
    <livewire:vefatlist-table theme="bootstrap-5" />
</div>


<!-- Adds the Core Table Scripts -->
@rappasoftTableScripts
@endif