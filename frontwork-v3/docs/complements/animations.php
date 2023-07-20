<?php 
$comment = new Comment;
if( isset($_GET['act']) && $_GET['act'] == 'update' ) : ?>

<form method="POST" class="formit w75 mb20" action="<?= URL::current() ?>">
    <?php 
    $comment->update();
    $comment->delete();
    if( $comment->select() > 0 ) :
        foreach( $comment->select() as $comm ) : 
            $status = $comm->Status == 1 ? 'Aprovado' : 'Pendente';
            $has_parent = $comm->Parent != 0 ? '<div class="ft18 mt15 mb5">Em resposta ao comentário: <i class="ft19">'.$comm->Parent.'</i></div>' : NULL; 

            echo $has_parent;
    ?>
            <div class="holder">
                <div class="grid">
                    <div class="cn_6">
                        <label>Autor</label>
                        <input disabled value="<?= $comm->Name ?>" />
                    </div>
                    <div class="cn_6">
                        <label>E-mail</label>
                        <input disabled value="<?= $comm->Email ?>" />
                    </div>
                </div>
            </div>
            <label>Data</label><br />
            <input class="w50" disabled value="<?= on_datetime($comm->Date) ?>" />
            <br /><label>Post relacionado</label><br />
            <input class="w50" disabled value="<?= $comment->related($comm->Related) ?>" />
            <fieldset class="w50 mlauto">
                <legend>Status</legend>
                <label><input type="radio" name="comm_status" value="1" <?= $comm->Status == 1 ? 'checked' : NULL; ?> /> Aprovado</label><br />
                <label><input type="radio" name="comm_status" value="0" <?= $comm->Status == 0 ? 'checked' : NULL; ?> /> Pendente</label>
            </fieldset>
            <label>Comentário</label><br />

            <textarea name="comm_content"><?= $comm->Content ?></textarea>

            <input class="btn prime mt15" type="submit" name="update" value="Atualizar comentário" />

            <div class="mlauto mt10 w60">
                <p class="delete_warning txt_right">Antes de excluír esse comentário certifique-se que ele não tenha respostas, se possuir, primeiro exclua ou edite os mesmos antes de excluir este.</p>
                <button onclick="javascript: return confirm('Vai mesmo excluir esse comentário?')" class="false ft18 delete mlauto dblock" name="delete" value="<?= $comm->ID ?>">Excluir</button>
            </div>
    <?php 
        endforeach;
    else :
        echo 'O comentário com essa identificação não existe.';
    endif; ?>
</form>

<?php else : ?>

<form class="quest" method="GET" action="<?= URL::current() ?>">
    <input type="hidden" name="src" value="<?= iG('src') ?>" />
    <input type="search" name="record" placeholder="Procurar comentário" value="<?= URL::iG('record') ?>" />
    <input type="submit" value="Buscar" />
</form>
<form method="POST" class="formit" action="<?= URL::current() ?>">
    <table class="datable">
        <?php $comment = new Comment; $comment->delete(); ?>
        <tr><!-- Em resposta para -->
        	<th class="txt_center w50px ft26 cur_help" title="Editar comentário"><i class="icon_key"></i></th>
        	<th>Autor</th>
        	<th>E-mail</th>
            <th>Post relacionado</th>
            <th>Data</th>
            <th>Status</th>
            <th class="txt_center w50px cur_help ft26" title="Excluir"><i class="icon_trash"></i></th>
        </tr>
        <?php
        if( $comment->select() > 0 ) :
            foreach( $comment->select() as $comm ) : 
	        $approved = $comm->Status == 1 ? 'Aprovado' : 'Pendente';
	        $parentbar = $comm->Parent == 0 ? '' : '<b>&horbar; </b>';
	        $parentitle = $comm->Parent == 0 ? '' : 'title=" Em resposta ao comentário: [ '.$comm->Parent.' ] "'; ?>
                <tr <?= $parentitle ?> >
                	<td class="txt_center"><a class="ft24" href="<?= admin_url('/?src=comment&act=update&id='.$comm->ID) ?>">&#x270E;</a></td>
                    <td class="cur_default"><?= $parentbar . $comm->Name ?></td>
                    <td><?= $comm->Email ?></td>
                    <td><?= $comment->related($comm->Related) ?></td>
                    <td class="ft14"><?= on_datetime($comm->Date) ?></td>
                    <td class="txt_center ft18"><?= $approved ?></td>
                    <td><button onclick="javascript: return confirm('Antes de excluír esse comentário certifique-se que ele não tenha respostas, se possue, primeiro exclua ou edite os mesmos antes de excluir este.\n\nVai mesmo excluir esse comentário?')"class="false ft24 txt_center mauto" name="delete" value="<?= $comm->ID ?>">&times;</button></td>
                </tr>
        		<?php 
            endforeach;
            else :
            if( iG('record') ) {
                echo '<div class="mb5">Nenhum comentário encontrado com esses termos de pesquisa.</div>';
            } else {
                echo '<div class="mb5">Nenhum comentário registrado.</div>';
            }
        endif; ?>
	</table>
</form>
<?php 
( new Pagination )->paginator();

endif;