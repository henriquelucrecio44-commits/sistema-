<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Conteúdo</title>
     <link rel="stylesheet" href="<?= base_url('assets/css/estilo.css') ?>">
    <style>
        .erro-box { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; padding: 10px; margin-bottom: 15px; border-radius: 4px; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; font-weight: bold; margin-bottom: 5px; }
        .form-group input, .form-group textarea { width: 100%; max-width: 500px; padding: 8px; box-sizing: border-box; }
        .btn-group { margin-top: 20px; }
    </style>
</head>
<body>

    <h1>Editar conteúdo #<?= esc($conteudo['Id']) ?></h1>

    <?php if (!empty($erros)): ?>
        <div class="erro-box">
            <p><strong>Por favor, corrija os seguintes erros:</strong></p>
            <ul>
                <?php foreach ($erros as $erro): ?>
                    <li><?= esc($erro) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="post" action="<?= site_url('conteudos/atualizar/' . $conteudo['Id']) ?>">
        <?= csrf_field() ?>

        <div class="form-group">
            <label for="Titulo">Título</label>
            <input 
                type="text" 
                id="Titulo" 
                name="Titulo" 
                maxlength="255" 
                value="<?= esc(old('Titulo', $conteudo['Titulo'] ?? '')) ?>" 
                placeholder="Insira o título do conteúdo"
                required
            >
        </div>

        <div class="form-group">
            <label for="Texto">Texto</label>
            <textarea 
                id="Texto" 
                name="Texto" 
                rows="10" 
                placeholder="Escreva o texto aqui..."
                required
            ><?= esc(old('Texto', $conteudo['Texto'] ?? '')) ?></textarea>
        </div>

        <div class="btn-group">
            <button type="submit">Salvar Alterações</button>
            <a href="<?= site_url('conteudos') ?>">Cancelar</a>
        </div>
    </form>

</body>
</html>