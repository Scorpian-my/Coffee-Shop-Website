function walkNode(node) {
  if (node.nodeType == 3) {
    node.data = node.data.replace(/\d/g, convert)
  }

  for (var i = 0; i < node.childNodes.length; i++) {
    walkNode(node.childNodes[i])
  }
}

walkNode(document.getElementsByTagName('body')[0])

function convert(a) {
  return ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'][a]
}
