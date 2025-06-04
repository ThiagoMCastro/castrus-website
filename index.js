// index.js para Castrus Digital com Express
const express = require("express");
const path = require("path");
const app = express();

// Configura o motor de visualização
app.set("view engine", "ejs");
app.set("views", path.join(__dirname, "views"));

// Arquivos estáticos
app.use(express.static(path.join(__dirname, "assets")));

// Dados da página
const menus = [
  { title: "Portfólio", link: "#portfolio" },
  { title: "Contato", link: "#contato" },
];

const clients = [
  { logo: "img/clients/horizonte.png", link: "https://horizonte-rp.com/" },
  { logo: "https://i0.wp.com/www.postimtabacaria.com.br/wp-content/uploads/2021/10/logo.png?fit=320%2C320&ssl=1", link: "https://www.postimtabacaria.com.br/" }
];

const projects = [
  {
    title: "Website Horizonte Roleplay",
    link: "https://horizonte-rp.com",
    tags: ["website", "design", "codeigniter"],
    description: "Website do servidor de SA-MP Horizonte Roleplay, com design responsivo e otimizado para SEO. Com backend em Codeigniter.",
    image: "https://i.imgur.com/0zi7dwj.png"
  },
  {
    title: "Painel de Jogadores Horizonte RP",
    link: "https://horizonte-rp.com/ucp",
    tags: ["php", "website", "codeigniter"],
    description: "Painel de Jogadores do servidor de SA-MP Horizonte Roleplay, com diversos sistemas integrados.",
    image: "https://i.imgur.com/R4iU7zX.png"
  },
  {
    title: "Game Launcher Horizonte RP",
    link: "https://horizonte-rp.com",
    tags: ["Electron", "game launcher", "sa-mp"],
    description: "Game Launcher do servidor de SA-MP Horizonte Roleplay, desenvolvido em ElectronJS.",
    image: "https://i.imgur.com/v01l1ZF.png"
  },
  {
    title: "Website Sombras que Ecoam",
    link: "https://sombrasqueeecoam.com.br/",
    tags: ["website", "design", "landing-page"],
    description: "Website do curta-metragem Sombras que Ecoam, com design responsivo e otimizado para SEO.",
    image: "https://i.imgur.com/CVac7Rh.png"
  },
  {
    title: "Website Postim Tabacaria",
    link: "https://www.postimtabacaria.com.br/",
    tags: ["website", "design", "wordpress"],
    description: "Website da Postim Tabacaria, com design responsivo e otimizado para SEO. Tema criado autoralmente para WordPress e PHP.",
    image: "https://i.imgur.com/ZCtNDhY.png"
  },
  {
    title: "Diversos outros projetos",
    link: "https://www.behance.net/castrusdigital",
    tags: ["website", "design", "fotografia"],
    description: "Confira outros projetos desenvolvidos por nós, incluindo sites, design gráfico e fotografia no nosso Behance.",
    image: "https://i.imgur.com/6gBgECH.png"
  }
];

const social = [
  { icon: "bi bi-linkedin", link: "https://www.linkedin.com/in/thiagocdearaujo/" },
  { icon: "bi bi-instagram", link: "https://www.instagram.com/castrus.digital" },
  { icon: "bi bi-github", link: "https://github.com/thiagomcastro" },
  { icon: "bi bi-behance", link: "https://www.behance.net/castrusdigital" }
];

const services = [
  {
    title: "Design Gráfico",
    description: "Criação de identidade visual, logotipos, materiais gráficos e muito mais.",
    image: "img/services/design.png"
  },
  {
    title: "Desenvolvimento<br>Web",
    description: "Sites responsivos, lojas virtuais e sistemas personalizados.",
    image: "img/services/sites.png"
  },
  {
    title: "Edição de Vídeo",
    description: "Produção e edição de vídeos para redes sociais, YouTube e eventos.",
    image: "img/services/video.png"
  },
  {
    title: "Fotografia<br>Profissional",
    description: "Fotografia de produtos, eventos e retratos.",
    image: "img/services/fotografia.png"
  }
];

// Rota principal
app.get("/", (req, res) => {
  res.render("index", {
    menus,
    clients,
    projects,
    social,
    services,
  });
});

// Inicializa o servidor
const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`Servidor rodando em http://localhost:${PORT}`);
});