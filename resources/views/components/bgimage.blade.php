<style>
.{{ $bgimageid }} {
    background: url({{ $image }}) no-repeat center center;
    background-size: cover;
    background-color: rgba(0, 0, 0, 0.5);
    background-blend-mode: overlay;
    color: white;
}
</style>
<div class="container-fluid p-0 {{ $bgimageid }}">
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <br>
        {{ $caption }}
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</div>
