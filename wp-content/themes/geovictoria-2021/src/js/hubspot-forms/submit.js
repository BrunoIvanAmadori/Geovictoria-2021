// API documentation, https://developers.hubspot.com/docs/methods/forms/submit_form

const convertToFormData = (data) =>
  Object.entries(data).reduce((formData, entry) => {
    const [key, value] = entry;
    if (value !== null && typeof value === "object") {
      formData.append(key, JSON.stringify(value));
    } else {
      formData.append(key, value);
    }
    return formData;
  }, new FormData());

// extracts the tracking cookie placed by the HubSpot tracking library
const extractHubspotCookie = () =>
  document.cookie
    .split(";")
    .filter((item) => item.includes("hubspotutk="))[0]
    .split("=")[1];

// form submit handler
const doSubmitToHubspot = (data, targetForm) => {
  const getFormFields = function () {
    let formFields = new FormData(data);
    let fieldsToDelete = [];

    for (var entry of formFields.entries()) {
      if (/^\_wpcf7/.test(entry[0])) {
        fieldsToDelete.push(entry[0]);
      }
    }

    if (fieldsToDelete) {
      fieldsToDelete.forEach((field) => {
        formFields.delete(field);
      });
    }

    return Object.fromEntries(formFields);
  };

  const formData = {
    ...getFormFields(),
    hs_context: {
      hutk: extractHubspotCookie(),
      pageUrl: window.location.href,
    },
  };

  const formDataUrlParams = new URLSearchParams(convertToFormData(formData));

  fetch("https://forms.hubspot.com/uploads/form/v2/7742864/" + targetForm, {
    method: "POST",
    mode: "no-cors",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: formDataUrlParams,
  }).then((response) => {
    // Thank the user for submitting the form
    // HubSpot API only ever returns a 204, no 200 and no error codes
  });
};

export { doSubmitToHubspot };
