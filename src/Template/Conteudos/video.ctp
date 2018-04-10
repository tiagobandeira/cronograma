<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conteudo $conteudo
 */
?>
<div class="conteudos view large-9 medium-8 columns content">
	<h4 class="my-title">Vídeo Aulas</h4>
    
    <div class="col s12 m12 l8 grey darken-4 no-padding">
        <?php if(!empty($conteudo)):?>
        <div class="video-container">
            <iframe width="853" height="480" src="<?= $conteudo->video?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <?php endif;?>
    </div>
    <div class="col s12 m12 l4 grey lighten-3 no-padding ">
        <div class="content-play-list no-padding">
            <ul class="collection with-header" >
                <li class="collection-header grey lighten-2 ">
                    <h6><?= h($conteudo->nome) ?></h6>
                    <p><?= h($conteudo->nota) ?></p>
                </li>
                <?php if(!empty($conteudo->tema->conteudos)):?>
                <li class="play-list-body no-padding">
                    <ul class="collection ">
                        <?php foreach($conteudo->tema->conteudos as $value):?>
                        
                        <li class="collection-item avatar grey lighten-3">
                            <a href="<?= $value->id?>">
                                <i class="mdi-av-play-arrow circle red"></i>
                                <span class="title"><?= $value->nome?></span>
                                <p><?= $value->nota?></p>
                            </a>
                        </li>
                        <?php endforeach;?>
                    </ul>
                </li>
                <?php endif;?>
            </ul>
        </div>
    </div>
</div>
