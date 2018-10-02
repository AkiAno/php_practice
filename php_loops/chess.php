<style>
.board .row {
    overflow: hidden;
}
.board .row > div {
    float: left;
    width: 3em;
    height: 3em;
}
.board .black {
    background-color: #000000;
}
</style>


<?php for($i = 0; $i < 8; $i++):?>
    <div class="board">
        <div class="row">
        <?php for($j = 0; $j < 8; $j++):?>
            <?php if($j%2 == $i%2):?>
                <div class="white">
                    <?php if($i == 1 && $j == 3):?>
                        <img src='https://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/king.png'>
                    <?php endif?>
                </div>
            <?php else:?>
                <div class="black">
                <?php if($i == 1 && $j == 4):?>
                        <img src='https://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/king.png' >
                <?php endif?>
                </div>
            <?php endif?>
            
        <?php endfor?>
        </div>
    </div>
    
<?php endfor?>