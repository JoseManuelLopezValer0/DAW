let messages = [
    {text: "Hello", from: "John"},
    {text: "How goes?", from: "John"},
    {text: "See you soon", from: "Alice"}
  ];
  
  let readMessages = new WeakSet();
  
  // se han leído dos mensajes
  readMessages.add(messages[0]);
  readMessages.add(messages[1]);
  // readMessages tiene 2 elementos
  
  // ...¡leamos nuevamente el primer mensaje!
  readMessages.add(messages[0]);
  // readMessages todavía tiene dos únicos elementos
  
  // respuesta: ¿se leyó el mensaje [0]?
  alert("Read message 0: " + readMessages.has(messages[0])); // true
  
  messages.shift();
  // ahora readMessages tiene 1 elemento (técnicamente la memoria puede limpiarse más tarde)