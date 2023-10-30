class Agenda {
  constructor() {
    this.eventos = this.carregarEventos();
    this.calendario = document.getElementById("calendario");
    this.eventoForm = document.getElementById("evento-form");
    this.adicionarEventoBtn = document.getElementById("adicionar-evento");
    this.salvarEventoBtn = document.getElementById("salvar-evento");
    this.cancelarEventoBtn = document.getElementById("cancelar-evento");
    this.tituloInput = document.getElementById("evento-titulo");
    this.dataInput = document.getElementById("evento-data");

    this.adicionarEventoBtn.addEventListener("click", () => this.exibirFormulario());
    this.cancelarEventoBtn.addEventListener("click", () => this.cancelarEdicao());
    this.salvarEventoBtn.addEventListener("click", () => this.salvarEvento());

    this.atualizarCalendario();
  }

  carregarEventos() {
    const eventosJSON = localStorage.getItem("eventos");
    return eventosJSON ? JSON.parse(eventosJSON) : [];
  }

  salvarEventos() {
    localStorage.setItem("eventos", JSON.stringify(this.eventos));
  }

  atualizarCalendario() {
    this.calendario.innerHTML = "";
    this.eventos.forEach((evento, index) => {
      const eventoElement = this.criarEventoElement(evento, index);
      this.calendario.appendChild(eventoElement);
    });
  }

  criarEventoElement(evento, index) {
    const eventoElement = document.createElement("div");
    eventoElement.className = "evento";
    eventoElement.draggable = true;
    eventoElement.dataset.eventoIndex = index;
    eventoElement.innerHTML = `
      <h3>${evento.titulo}</h3>
      <p>${this.formatarData(evento.data)}</p>
      <button class="editar-evento">Editar</button>
      <button class="remover-evento">Remover</button>
    `;

    const editarBtn = eventoElement.querySelector(".editar-evento");
    const removerBtn = eventoElement.querySelector(".remover-evento");

    editarBtn.addEventListener("click", () => this.editarEvento(index));
    removerBtn.addEventListener("click", () => this.removerEvento(index));

    eventoElement.addEventListener("dragstart", (e) => {
      e.dataTransfer.setData("eventoIndex", index);
    });

    return eventoElement;
  }

  formatarData(data) {
    const options = { year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric', hour12: false };
    return new Date(data).toLocaleString(undefined, options);
  }

  exibirFormulario() {
    this.eventoForm.style.display = "block";
  }

  cancelarEdicao() {
    this.eventoForm.style.display = "none";
    this.limparFormulario();
  }

  limparFormulario() {
    this.tituloInput.value = "";
    this.dataInput.value = "";
    delete this.eventoForm.dataset.editando;
  }

  salvarEvento() {
    const titulo = this.tituloInput.value;
    const data = this.dataInput.value;

    if (titulo && data) {
      if (!this.eventoForm.dataset.editando) {
        this.eventos.push({ titulo, data });
      } else {
        const index = parseInt(this.eventoForm.dataset.editando, 10);
        this.eventos[index] = { titulo, data };
      }

      this.salvarEventos();
      this.atualizarCalendario();
      this.cancelarEdicao();
    }
  }

  editarEvento(index) {
    const evento = this.eventos[index];
    this.tituloInput.value = evento.titulo;
    this.dataInput.value = evento.data;
    this.eventoForm.dataset.editando = index;
    this.exibirFormulario();
  }

  removerEvento(index) {
    this.eventos.splice(index, 1);
    this.salvarEventos();
    this.atualizarCalendario();
  }
}

new Agenda();
