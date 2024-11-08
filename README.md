O protocolo que será utilizado será um protocolo desenvolvido especialmente para este
projeto, sendo que este é desenvolvido sobre o protocolo de transporte TCP (com garantias
de conexão) e utiliza o conceito de mensagens para comunicação, onde cada mensagem
deve ser ou uma requisição ou uma resposta. O cliente constrói mensagens de requisição
que comunica sua intenção e direciona essas mensagens a um servidor identificado pelo
seu endereço IP e porta. O servidor, por sua vez, escuta por requisições, analisa cada uma
das mensagens recebidas e interpreta a intenção daquela mensagem, respondendo esta
requisição com uma ou mais mensagens de resposta. O cliente, então, examina as
respostas recebidas para ver se as intenções originais foram atingidas, determinando o que
deve ser feito no próximo passo baseado no que foi recebido.
