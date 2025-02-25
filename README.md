# ☕︎ Projeto de Phishing (Exemplo Educacional)

**⚠︎ AVISO**: Este projeto foi criado para fins educacionais e de aprendizado sobre segurança cibernética. **Não deve ser usado para fins maliciosos.** O uso inadequado deste código para atividades como phishing é ilegal e pode resultar em penalidades legais.

## ☕︎ Descrição
Este projeto é uma simulação de um ataque de phishing, que utiliza uma página falsa de login para capturar credenciais de usuários. Ele foi desenvolvido para demonstrar os riscos e técnicas usadas em ataques de phishing, com o objetivo de conscientizar e educar sobre segurança digital.

## ☕︎ Funcionalidade
- Página de login falsa simulando uma página de rede social (Facebook).
- Captura de credenciais de login (usuário e senha).
- Armazenamento das credenciais capturadas em um arquivo de texto (`credenciais.txt`).

## ☕︎ Como Usar
1. Clone este repositório ou faça o download dos arquivos.
2. Coloque os arquivos em um servidor local (como o XAMPP) ou utilize o servidor PHP embutido.
3. Acesse a página de login falsa pelo navegador em `http://localhost/index.html`.
4. Insira credenciais fictícias para simular um login e observe o arquivo `credenciais.txt` para visualizar os dados capturados.

## ☕︎ Requisitos
- PHP instalado localmente.
- Um servidor local como XAMPP, ou use o servidor embutido do PHP.

## ☕︎ Instalação
1. Clone este repositório:
  ```bash
   git clone https://github.com/MariaCampanaP/Projeto-Phishing.git
  ```
2. Navegue até a pasta do projeto:
   ```bash
    cd phishing-educacional
    ```
3. Inicie um servidor PHP local:
    ```bash
    php -S localhost:8000
    ```
4. Abra o navegador e vá para `http://localhost:8000.index.html`.

## ☕︎ Estrutura do Projeto
```plaintext
projeto-phishing/
├── index.html           # Página HTML do formulário de phishing
├── processa_login.php   # Script PHP para capturar e salvar credenciais
├── credenciais.txt      # Arquivo onde as credenciais capturadas são armazenadas
├── README.md            # Descrição do projeto
└── LICENSE              # Licença do projeto

