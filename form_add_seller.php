<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de varejo - Cadastro de vendedor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="bg-pink-600">
        <ul class="flex">
            <li class="mx-4">
                <a href="../../index.html">Home</a>
            </li>
          <a href="form_add_product.php">Novo produto</a>
        </li>
            <li>
            <li class="mx-4">
                <a href="#">Cadastrar vendedor</a>
            </li>
        </ul>
    </header>
    <main class="mt-4 ml-4">
        <form action="../Controller/Seller.php" method="POST">
            <section class="columns-3">
                <article>
                    <label for="name">Digite o nome do vendedor: </label>
                    <input type="text" id="name" name="name" class="border border-blue-400">
                </article>
                <article>
                    <label for="cnpj">Digite o número do CNPJ: </label>
                    <input type="name" id="CNPJ" name="CNPJ" class="border border-blue-400">
                </article>
                <article>
                    <label for="email">Endereço de email: </label>
                    <input type="name" id="email" name="email" class="border border-blue-400">
                </article>
            </section>
            <article class="flex justify-center mt-4">
                <button type="submit" class="rounded p-4 bg-blue-700 text-white">Cadastrar</button>
            </article>
        </form>
    </main>
</body>
</html>