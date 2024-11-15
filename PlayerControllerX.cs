using UnityEngine;

public class PlayerController : MonoBehaviour
{
    public float speed = 5f;
    private Vector3 playerVelocity;

    void FixedUpdate()
    {
        float horizontalInput = Input.GetAxis("Horizontal");
        playerVelocity = new Vector3(horizontalInput * speed, 0f, 0f);
        transform.Translate(playerVelocity * Time.deltaTime, Space.Self);
    }
}