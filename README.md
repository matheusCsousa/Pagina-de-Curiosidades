# Página de Curiosidades

Site de curiosidades desenvolvido em PHP como projeto acadêmico da Fatec Jundiaí. Cada página exibe informações sobre um tema diferente, com dados carregados de fontes distintas — HTML estático, XML e JSON.

## Páginas

| Página | Tema | Fonte de dados |
|---|---|---|
| `curiosidade1.php` | Amazônia | HTML estático |
| `curiosidade2.php` | Caça F-39 Gripen | XML (`curiosidade2.xml`) |
| `curiosidade3.php` | Missão Artemis II | JSON (`curiosidade3.json`) |
| `nomes.php` | Desenvolvedores | HTML estático |

## Como executar

Requer PHP + servidor local (XAMPP ou PHP built-in).

**PHP built-in:**
```bash
php -S localhost:8000
```

Acesse `http://localhost:8000/index.php`.

**XAMPP:** copie a pasta para `htdocs/` e acesse via `http://localhost/Pagina-de-Curiosidades/`.

## Estrutura

```
.
├── index.php           # Página inicial com os cards
├── curiosidade1.php    # Amazônia (dados no próprio PHP)
├── curiosidade2.php    # F-39 Gripen (lê curiosidade2.xml)
├── curiosidade3.php    # Artemis II (lê curiosidade3.json)
├── curiosidade2.xml    # Dados do Gripen
├── curiosidade3.json   # Dados da Artemis II
├── nomes.php           # Créditos dos desenvolvedores
├── style.css           # Estilos globais
└── imagens/
    └── amazonia.jpg
```

## Desenvolvedores

Projeto desenvolvido por alunos do curso de Análise e Desenvolvimento de Sistemas — Fatec Jundiaí.

- Matheus Correia de Sousa
- Henry Gabriel Diniz Pereira
- Guilherme Novaes Brito
- Plinio Henrique Pirane Ribeiro
- Maria Fernanda Gonçalves Venda
