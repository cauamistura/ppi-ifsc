function calcularNotas() {
    const notas = [];
    const alunos = [];

    let countAluno = document.getElementById('countAluno').value; 

    for (let i = 0; i < countAluno; i++) {
      const aluno = {};
      aluno.nome = prompt(`Nome do aluno ${i + 1}:`);
      aluno.nota1 = Number(prompt(`1ª nota de ${aluno.nome}:`));
      aluno.nota2 = Number(prompt(`2ª nota de ${aluno.nome}:`));

      const media = (aluno.nota1 + aluno.nota2) / 2;
      aluno.media = media;

      if (media >= 6) {
        aluno.aprovado = true;
      } else {
        aluno.aprovado = false;
      }

      alunos.push(aluno);
    }

    const aprovados = alunos.filter((aluno) => aluno.aprovado);
    const reprovados = alunos.filter((aluno) => !aluno.aprovado);

    let resultado = document.getElementById('resultado');
    resultado.innerHTML = '';

    let aprovadosText = '<h5>Alunos aprovados:</h5>';
    aprovados.forEach((aluno) => {
      aprovadosText += `<p class="aprovado">${aluno.nome} - Média: ${aluno.media}</p>`;
    });

    let reprovadosText = '<h5>Alunos reprovados:</h5>';
    reprovados.forEach((aluno) => {
      reprovadosText += `<p class="reprovado">${aluno.nome} - Média: ${aluno.media}</p>`;
    });

    resultado.innerHTML = aprovadosText + reprovadosText;
}