<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>Public APIs</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon"
          type="image/x-icon"
          href="https://dantofema.ar/images/marca-dantofema-2.png">
</head>
<body>

<div class="bg-white">
    <div class="relative isolate overflow-hidden bg-gradient-to-b from-indigo-100/20">
        <div class="mx-auto max-w-7xl pb-24 pt-10 sm:pb-32 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:px-8 lg:py-40">
            <div class="px-6 lg:px-0 lg:pt-4">
                <div class="mx-auto max-w-2xl">
                    <div class="max-w-lg">
                        <img class="h-11"
                             src="https://dantofema.ar/images/marca-dantofema-1.png"
                             alt="dantofema">
       
                        <h1 class="mt-10 text-4xl font-bold tracking-tight text-indigo-900 sm:text-6xl">Explora
                            Nuestra
                            Colección de APIs Públicas</h1>
                        <p class="mt-6 text-lg leading-8 text-gray-600">Accede a una Amplia Gama de Recursos
                            Gratuitos
                            para Potenciar Tus Proyectos</p>
                        <div class="mt-10 flex items-center gap-x-6">
                            <a href="https://github.com/dantofema/public-apis"
                               class="text-sm font-semibold leading-6 text-gray-900">Ver en GitHub
                                <span aria-hidden="true">→</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-20 sm:mt-24 md:mx-auto md:max-w-2xl lg:mx-0 lg:mt-0 lg:w-screen">
                <div class="absolute inset-y-0 right-1/2 -z-10 -mr-10 w-[200%] skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 md:-mr-20 lg:-mr-36"
                     aria-hidden="true"></div>
                <div class="shadow-lg md:rounded-3xl">

                    <img src="/images/api-header.png"
                         alt="">

                </div>
            </div>
        </div>
        <div class="absolute inset-x-0 bottom-0 -z-10 h-24 bg-gradient-to-t from-white sm:h-32"></div>
    </div>
</div>

<?= $this->renderSection('content') ?>

<footer class="bg-white">
    <div class="mx-auto max-w-7xl px-6 py-12 md:flex md:items-center md:justify-between lg:px-8">
        <div class="flex justify-center space-x-6 md:order-2">


            <a href="https://github.com/dantofema"
               target="_blank"
               class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">GitHub</span>
                <svg class="h-6 w-6"
                     fill="currentColor"
                     viewBox="0 0 24 24"
                     aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                          clip-rule="evenodd"/>
                </svg>
            </a>

        </div>
        <div class="mt-8 md:order-1 md:mt-0">
            <p class="text-xs leading-4 text-gray-500 font-semibold">PUBLIC APIs</p>

            <p class="text-xs leading-5 text-gray-500 mt-4">&copy; 2024
                <a href="https://dantofema.ar"
                   class="text-indigo-400 font-black underline
                    hover:text-indigo-600">dantofema</a>.
                All
                rights
                reserved.</p>

        </div>
    </div>
</footer>
</body>
</html>
