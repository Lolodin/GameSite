export default function (token) {
    return {
        headers: {
            "Authorization": "Bearer " + token,
            'Content-Type': 'application/json'
        }
    }
}
