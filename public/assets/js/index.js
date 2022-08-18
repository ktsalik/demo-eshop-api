$(function() {
  const onBtnTestClick = (e) => {
    const endpointEl = $(e.target).closest('.endpoint');
    let url = `api${endpointEl.find('.url').text()}`;
    url = url.replace(':categoryId', 1);
    url = url.replace(':productId', 14249);
    url = url.replace(':productName', 'Awesome Product');
    const method = endpointEl.find('.request-method').text();

    $.ajax({
      url,
      method,
    }).then((response) => {
      endpointEl.find('.output').jsonViewer(response);
    });
  };

  $('.endpoint button').click(onBtnTestClick);
});