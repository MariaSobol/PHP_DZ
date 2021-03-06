<?php
function render(string $template, array $params = [])
{
    ob_start();
    extract($params);
    include VIEWS_DIR . "{$template}.php";
    return ob_get_clean();
}

function renderWithWrap(string $wrap, array $templatesWithParams)
{
    $content = "";
    foreach ($templatesWithParams as $template => $params){
        $content = $content . render($template, $params);
    }

    return render($wrap, ['content' => $content]);
}

