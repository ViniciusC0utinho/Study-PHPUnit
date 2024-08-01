# Estudos sobre testes de unidade com PHPUnit.

Para instalar o PHPUnit, execute o seguinte comando:
```shell
composer require phpunit/phpunit --dev
```

Após a instalação, crie um arquivo phpunit.xml na raiz do seu projeto com a seguinte configuração:
```xml
<phpunit bootstrap="vendor/autoload.php" colors="true">
    <testsuites>
        <testsuite name="ApplicationTest">
            <directory>tests</directory>
        </testsuite>
    </testsuites>
</phpunit>
```