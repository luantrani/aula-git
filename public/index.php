<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/app/model/Cidade.php';

header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula Git — Modelo Cidade</title>
    <style>
        :root {
            --bg: #0f1419;
            --card: #1a2332;
            --text: #e7ecf3;
            --muted: #8b9cb3;
            --accent: #3d9cf5;
            --ok: #3ecf8e;
            --err: #f07178;
        }
        * { box-sizing: border-box; }
        body {
            font-family: "Segoe UI", system-ui, sans-serif;
            background: var(--bg);
            color: var(--text);
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            line-height: 1.5;
        }
        main {
            background: var(--card);
            border-radius: 12px;
            padding: 1.75rem 2rem;
            max-width: 28rem;
            width: 100%;
            box-shadow: 0 12px 40px rgba(0,0,0,.35);
            border: 1px solid rgba(255,255,255,.06);
        }
        h1 {
            font-size: 1.25rem;
            font-weight: 600;
            margin: 0 0 0.25rem;
        }
        p.lead {
            color: var(--muted);
            font-size: 0.9rem;
            margin: 0 0 1.25rem;
        }
        dl {
            margin: 0;
            display: grid;
            gap: 0.65rem;
        }
        dt {
            color: var(--muted);
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: .04em;
        }
        dd {
            margin: 0;
            font-size: 1.05rem;
        }
        .badge {
            display: inline-block;
            background: rgba(61, 156, 245, .15);
            color: var(--accent);
            padding: 0.2rem 0.5rem;
            border-radius: 6px;
            font-weight: 600;
            font-size: 0.95rem;
        }
        .error {
            color: var(--err);
            padding: 0.75rem 1rem;
            background: rgba(240, 113, 120, .1);
            border-radius: 8px;
            border: 1px solid rgba(240, 113, 120, .25);
        }
        footer {
            margin-top: 1.25rem;
            padding-top: 1rem;
            border-top: 1px solid rgba(255,255,255,.08);
            font-size: 0.8rem;
            color: var(--muted);
        }
    </style>
</head>
<body>
    <main>
        <?php
        try {
            $cidade = new Cidade('Itapira', 'sp');
            $cidade->setId(1);
            ?>
            <h1>Cidade cadastrada</h1>
            <p class="lead">Exemplo de modelo em PHP para a aula de Git.</p>
            <dl>
                <dt>ID</dt>
                <dd><?= htmlspecialchars((string) $cidade->getId(), ENT_QUOTES, 'UTF-8') ?></dd>
                <dt>Nome</dt>
                <dd><?= htmlspecialchars($cidade->getNome(), ENT_QUOTES, 'UTF-8') ?></dd>
                <dt>Estado</dt>
                <dd><span class="badge"><?= htmlspecialchars($cidade->getEstado(), ENT_QUOTES, 'UTF-8') ?></span></dd>
            </dl>
            <footer>Validações: nome obrigatório; estado com 2 letras (UF).</footer>
            <?php
        } catch (Throwable $e) {
            ?>
            <h1>Erro</h1>
            <p class="error"><?= htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8') ?></p>
            <?php
        }
        ?>
    </main>
</body>
</html>
