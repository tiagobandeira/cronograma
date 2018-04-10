<?php
    
    foreach ($horaEstudo as $value) {
       #echo($value);
        /*
        foreach ($value->tema->disciplina as $value2) {
            echo $value2->nome . " - "; 
            # code...
        }*/
    }
?>
<h4  class="green-text">Estudar Hoje</h4>
<div class="row">
        <div class="col s12 m12 l12">
            
            <table>
                <thead>
                    <tr>
                        <th>Matéria</th>
                        <th>Disciplina</th>
                        <th>Tema</th>
                        <th>Conteúdo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($horaEstudo as $value) {
                    ?>
                    <tr>
                        <td><?= $value->materia->nome?></td>
                        <td><?= $value->tema->disciplina->nome?></td>
                        <td><?= $value->tema->nome?></td>
                        <td><?= $this->Html->link(__('View'), ['controller' => 'Temas','action' => 'conteudos', $value->tema->id]) ?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
</div>

<div class="row">
        <?php
            foreach ($horaEstudo as $value) {
        ?>
            <?php foreach ($value->tema->conteudos as $conteudo){ ?>
            
            <?php }?>
        <?php }?>
</div>

