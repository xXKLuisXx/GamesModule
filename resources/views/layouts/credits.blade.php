<style>
    #floating-credits {
        position: fixed;
        border: 1px solid black;
        border-radius: 0 20px 20px 0;
        background-color: rgba(255, 200, 200, 0.5);
        width: 300px;
        bottom: 50%;
        left: 0;
        right: 0;
        z-index: 999;
    }

    .coin-class {
        margin: auto;
        margin-top: 5px;
        margin-bottom: 5px;
        border: 1px solid black;
        width: 50%;
        min-width: 80px;
        border-radius: 20px;
        padding: 5px;
        background-color: rgba(255, 255, 255, 0.8)
    }
</style>

<div id="floating-credits">
    <div id="credits" class="coin-class">
        $100
    </div>
    <div id="mx" class="coin-class">
        $200
    </div>
    <div id="us" class="coin-class">
        $300
    </div>
</div>