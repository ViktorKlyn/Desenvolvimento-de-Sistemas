document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("hobbyForm");
  const resultado = document.getElementById("resultado");
  const descricao = document.getElementById("descricao");
  const contador = document.getElementById("contador");

  // contador de caracteres
  descricao.addEventListener("input", () => {
    contador.textContent = `${descricao.value.length} / 200 caracteres`;
  });

  form.addEventListener("submit", (e) => {
    e.preventDefault();

    const nome = document.getElementById("nome").value;
    const cidade = document.getElementById("cidade").value;
    const idade = document.getElementById("idade").value;
    const hobby = document.getElementById("hobby").value;
    const nivel = document.querySelector("input[name='nivel']:checked")?.value;
    const tempo = document.getElementById("tempo").value;
    const desc = descricao.value;

    if (!nome || !cidade || !idade || !hobby || !nivel || !tempo) {
      alert("Por favor, preencha todos os campos obrigatórios!");
      return;
    }

    resultado.innerHTML = `
      <div class="card shadow p-3">
        <h4>Resumo do Cadastro</h4>
        <p><strong>Olá ${nome}!</strong></p>
        <p>Você mora em ${cidade} e tem ${idade} anos.</p>
        <p>Seu hobby escolhido é <strong>${hobby}</strong>.</p>
        <p>Nível de experiência: ${nivel}.</p>
        <p>Dedica cerca de ${tempo} horas por semana.</p>
        <p>Descrição: ${desc}</p>
      </div>
    `;
  });
});
