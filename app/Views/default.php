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
                             alt="Your Company">
                        <div class="mt-24 sm:mt-32 lg:mt-16">

                        </div>
                        <h1 class="mt-10 text-4xl font-bold tracking-tight text-indigo-900 sm:text-6xl">Explora Nuestra
                            Colección de APIs Públicas</h1>
                        <p class="mt-6 text-lg leading-8 text-gray-600">Accede a una Amplia Gama de Recursos Gratuitos
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
</body>
</html>
